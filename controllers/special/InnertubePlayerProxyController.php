<?php
namespace Rehike\Controller\special;

use Rehike\YtApp;
use Rehike\ControllerV2\RequestMetadata;

use Rehike\ConfigManager\Config;

use function Rehike\Async\async;
use Rehike\SimpleFunnel;
use Rehike\SimpleFunnelResponse;
use Rehike\Network\Internal\Response;
use Rehike\Controller\core\HitchhikerController;
use Rehike\ControllerV2\IPostController;

/**
 * Proxies player requests and removes ads.
 * 
 * @author Taniko Yamamoto <kirasicecreamm@gmail.com>
 * @author The Rehike Maintainers
 */
class InnertubePlayerProxyController extends HitchhikerController implements IPostController
{
    public bool $useTemplate = false;

    public function onPost(YtApp $yt, RequestMetadata $request): void
    {
        async(function() use (&$yt, &$request) {
            $response = yield SimpleFunnel::funnelCurrentPage();
            
            if (true == Config::getConfigProp("appearance.enableAdblock"))
            {
                $data = $response->getJson();

                if (isset($data->playerAds))
                    unset($data->playerAds);

                if (isset($data->adPlacements))
                    unset($data->adPlacements);
                
                if (isset($data->adSlots))
                    unset($data->adSlots);

                $modifiedResponse = json_encode($data);
            }
            else
            {
                $modifiedResponse = $response->getText();
            }

            // PHP doesn't let you cast objects (like: (array) $response->headers)
            // and the Response constructor does not accept ResponseHeaders for
            // the headers so we must convert it manually
            $headers = [];
            foreach ($response->headers as $name => $value)
            {
                $headers[$name] = $value;
            }

            SimpleFunnelResponse::fromResponse(
                new Response(
                    $response->sourceRequest, 
                    $response->status,
                    $modifiedResponse,
                    $headers
                )
            )->output();
        });
    }
}