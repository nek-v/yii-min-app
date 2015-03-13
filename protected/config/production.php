<?php

return CMap::mergeArray(
                require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'components.php', CMap::mergeArray(
                        require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'database.php', CMap::mergeArray(
                                require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'general.php', CMap::mergeArray(
                                        require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'params.php', require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'modules.php')
                        )
                )
);
