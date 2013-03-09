Steam Event Parser
=====

This project parses Steam group events and shoves them into a PHP
array. An example implementation can be found in index.php.

Getting Started
=====

You should initialise the class first.

    $parser = new SteamEventParser();

The second step would be to generate the data, as shown here:

    $data = $parser->genData($groupname);

Do note that you'll have to store the data yourself; it won't be
saved in any shady class variable. This is to allow a more general/flexible
environment.
