Steam Event Parser
=====

This project parses Steam group events and shoves them into a PHP
array. An example implementation can be found in index.php.

Getting Started
=====

You should initialise the class first. Don't forget to include the library
though!

    require_once("steameventparser.php");
    $parser = new SteamEventParser();

The second step would be to generate the data, as shown here:

    $data = $parser->genData($groupname);

Do note that you'll have to store the data yourself; it won't be
saved in any shady class variable. This is to allow a more general/flexible
environment.

The data will look something like this:

    array (
        'status' => true,
        'events' => 
        array (
            0 => 
            array (
                'id' => '1298431274646156785',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1298431274646156785',
                'title' => 'SteamLUG FPS Friturday #7',
                'date' => '2013-03-15',
                'appid' => '059837f790367b171af255980c09614d71a34efe.jpg',
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/223470/059837f790367b171af255980c09614d71a34efe.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/059837f790367b171af255980c09614d71a34efe.jpg/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/059837f790367b171af255980c09614d71a34efe.jpg/header_292x136.jpg',
            ),
            1 => 
            array (
                'id' => '1299557718965155742',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1299557718965155742',
                'title' => 'SteamLUG Team Fortress 2',
                'date' => '2013-03-22',
                'appid' => 'e3f595a92552da3d664ad00277fad2107345f743.jpg',
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/440/e3f595a92552da3d664ad00277fad2107345f743.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/e3f595a92552da3d664ad00277fad2107345f743.jpg/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/e3f595a92552da3d664ad00277fad2107345f743.jpg/header_292x136.jpg',
            ),
            2 => 
            array (
                'id' => '1299557718964524322',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1299557718964524322',
                'title' => 'SteamLUG FPS Friturday #8',
                'date' => '2013-03-23',
                'appid' => '077b050ef3e89cd84e2c5a575d78d53b54058236.jpg',
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/80/077b050ef3e89cd84e2c5a575d78d53b54058236.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/077b050ef3e89cd84e2c5a575d78d53b54058236.jpg/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/077b050ef3e89cd84e2c5a575d78d53b54058236.jpg/header_292x136.jpg',
            ),
        ),
        'pastevents' => 
        array (
            0 => 
            array (
                'id' => '1298431274645364521',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1298431274645364521',
                'title' => 'SteamLUG FPS Friturday #6',
                'date' => '2013-03-09',
                'appid' => '66519d69efc5b98bdafe61347db4ec8be01dff7b.jpg',
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/1200/66519d69efc5b98bdafe61347db4ec8be01dff7b.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/66519d69efc5b98bdafe61347db4ec8be01dff7b.jpg/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/66519d69efc5b98bdafe61347db4ec8be01dff7b.jpg/header_292x136.jpg',
            ),
            1 => 
            array (
                'id' => '1298431274647178464',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1298431274647178464',
                'title' => 'SteamLUG Team Fortress 2',
                'date' => '2013-03-08',
                'appid' => 'e3f595a92552da3d664ad00277fad2107345f743.jpg',
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/440/e3f595a92552da3d664ad00277fad2107345f743.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/e3f595a92552da3d664ad00277fad2107345f743.jpg/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/e3f595a92552da3d664ad00277fad2107345f743.jpg/header_292x136.jpg',
            ),
            2 => 
            array (
                'id' => '1298431274644569141',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1298431274644569141',
                'title' => 'SteamLUG FPS Friturday #5',
                'date' => '2013-03-01',
                'appid' => '9052fa60c496a1c03383b27687ec50f4bf0f0e10.jpg',
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/240/9052fa60c496a1c03383b27687ec50f4bf0f0e10.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/9052fa60c496a1c03383b27687ec50f4bf0f0e10.jpg/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/9052fa60c496a1c03383b27687ec50f4bf0f0e10.jpg/header_292x136.jpg',
            ),
        ),
    )
