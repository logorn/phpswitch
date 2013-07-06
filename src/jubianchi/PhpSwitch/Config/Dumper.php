<?php
/**
 * This file is part of phpswitch.
 *
 * (c) Julien Bianchi <contact@jubianchi.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace jubianchi\PhpSwitch\Config;

use Symfony\Component\Yaml\Yaml;

class Dumper
{
    const GLOBAL_DIR = 0;
    const LOCAL_DIR = 1;

    /**
     * @param string                                    $path
     * @param \jubianchi\PhpSwitch\Config\Configuration $configuration
     *
     * @return \jubianchi\PhpSwitch\Config\Dumper
     */
    public function dump($path, Configuration $configuration)
    {
        file_put_contents(
            $path,
            Yaml::dump(array(Configuration::ROOT => $configuration->getValues()), 5, 2)
        );

        return $this;
    }
}
