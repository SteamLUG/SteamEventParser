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
                'id' => '1603563462383831650',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603563462383831650',
                'title' => 'SteamLUG Cast S01E05',
                'comments' => 1,
                'date' => '2013-07-26',
                'time' => '20:00',
                'tz' => 'UTC',
                'appid' => 0,
                'img_small' => 'http://cdn.steamcommunity.com/public/images/skin_1/eventIcon_ChatEvent.jpg',
                'img_header' => '',
                'img_header_small' => '',
            ),
            1 =>
            array (
                'id' => '1623827124404256124',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1623827124404256124',
                'title' => 'SteamLUG FPS Friturday #18',
                'comments' => 0,
                'date' => '2013-07-27',
                'time' => '20:00',
                'tz' => 'UTC',
                'appid' => 550,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/550/7d5a243f9500d2f8467312822f8af2a2928777ed.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/550/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/550/header_292x136.jpg',
            ),
            2 =>
            array (
                'id' => '1603562738925053662',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603562738925053662',
                'title' => 'SteamLUG Killing Floor',
                'comments' => 0,
                'date' => '2013-07-31',
                'time' => '18:00',
                'tz' => 'UTC',
                'appid' => 1250,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/1250/d8a2d777cb4c59cf06aa244166db232336520547.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/1250/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/1250/header_292x136.jpg',
            ),
        ),
        'pastevents' =>
        array (
            0 =>
            array (
                'id' => '1603563462371454828',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603563462371454828',
                'title' => 'SteamLUG Dota 2 - Bughunt',
                'comments' => 0,
                'date' => '2013-07-22',
                'time' => '18:00',
                'tz' => 'UTC',
                'appid' => 570,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/570/0bbb630d63262dd66d2fdd0f7d37e8661a410075.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/570/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/570/header_292x136.jpg',
            ),
            1 =>
            array (
                'id' => '1623827124404255106',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1623827124404255106',
                'title' => 'SteamLUG FPS Friturday #17',
                'comments' => 0,
                'date' => '2013-07-20',
                'time' => '20:00',
                'tz' => 'UTC',
                'appid' => 320,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/320/795e85364189511f4990861b578084deef086cb1.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/320/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/320/header_292x136.jpg',
            ),
            2 =>
            array (
                'id' => '1603563462061728605',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603563462061728605',
                'title' => 'SteamLUG Dota 2 - Bughunt',
                'comments' => 5,
                'date' => '2013-07-19',
                'time' => '20:00',
                'tz' => 'UTC',
                'appid' => 570,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/570/0bbb630d63262dd66d2fdd0f7d37e8661a410075.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/570/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/570/header_292x136.jpg',
            ),
            3 =>
            array (
                'id' => '1603562738925050071',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603562738925050071',
                'title' => 'SteamLUG Killing Floor',
                'comments' => 2,
                'date' => '2013-07-17',
                'time' => '17:00',
                'tz' => 'UTC',
                'appid' => 1250,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/1250/d8a2d777cb4c59cf06aa244166db232336520547.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/1250/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/1250/header_292x136.jpg',
            ),
            4 =>
            array (
                'id' => '1603563462061724674',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603563462061724674',
                'title' => 'SteamLUG Dota 2 Test - Bughunt',
                'comments' => 8,
                'date' => '2013-07-16',
                'time' => '17:00',
                'tz' => 'UTC',
                'appid' => 6,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/avatars/06/061818254b2c99ac49e6626adb128ed1282a392f.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/6/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/6/header_292x136.jpg',
            ),
            5 =>
            array (
                'id' => '1603563462061717382',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603563462061717382',
                'title' => 'SteamLUG Dota 2 Test - Bughunt',
                'comments' => 12,
                'date' => '2013-07-14',
                'time' => '17:00',
                'tz' => 'UTC',
                'appid' => 6,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/avatars/06/061818254b2c99ac49e6626adb128ed1282a392f.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/6/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/6/header_292x136.jpg',
            ),
            6 =>
            array (
                'id' => '1623827124404253168',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1623827124404253168',
                'title' => 'SteamLUG FPS Friturday #16',
                'comments' => 0,
                'date' => '2013-07-13',
                'time' => '20:04',
                'tz' => 'UTC',
                'appid' => 440,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/440/e3f595a92552da3d664ad00277fad2107345f743.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/440/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/440/header_292x136.jpg',
            ),
            7 =>
            array (
                'id' => '1605814084224418517',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1605814084224418517',
                'title' => 'SteamLUG Cast S01E04',
                'comments' => 6,
                'date' => '2013-07-12',
                'time' => '20:00',
                'tz' => 'UTC',
                'appid' => 0,
                'img_small' => 'http://cdn.steamcommunity.com/public/images/skin_1/eventIcon_ChatEvent.jpg',
                'img_header' => '',
                'img_header_small' => '',
            ),
            8 =>
            array (
                'id' => '1603562738960428508',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1603562738960428508',
                'title' => 'SteamLUG Serious Sam 3 Co-Op',
                'comments' => 0,
                'date' => '2013-07-10',
                'time' => '17:00',
                'tz' => 'UTC',
                'appid' => 41070,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/41070/2e7a17d4b345ffb13ef3d9e39257c2659fe4a86b.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/41070/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/41070/header_292x136.jpg',
            ),
            9 =>
            array (
                'id' => '1623827124404250263',
                'url' => 'http://steamcommunity.com/groups/steamlug#events/1623827124404250263',
                'title' => 'SteamLUG FPS Friturday #15',
                'comments' => 1,
                'date' => '2013-07-06',
                'time' => '20:00',
                'tz' => 'UTC',
                'appid' => 550,
                'img_small' => 'http://media.steampowered.com/steamcommunity/public/images/apps/550/7d5a243f9500d2f8467312822f8af2a2928777ed.jpg',
                'img_header' => 'http://cdn.steampowered.com/v/gfx/apps/550/header.jpg',
                'img_header_small' => 'http://cdn.steampowered.com/v/gfx/apps/550/header_292x136.jpg',
            ),
        ),
    )
