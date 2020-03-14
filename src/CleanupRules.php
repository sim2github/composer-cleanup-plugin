<?php

namespace Barryvdh\Composer;

class CleanupRules
{
    public static function getRules()
    {
        // Default patterns for common files
        $docs = 'README* CHANGELOG* FAQ* CONTRIBUTING* HISTORY* UPGRADING* UPGRADE* *.md package* demo example examples doc docs readme* changelog* composer*';
        $tests = '.travis.yml .scrutinizer.yml phpcs.xml* phpcs.php phpunit.xml* phpunit.php test tests Tests travis patchwork.json';

        return array(
            'anahkiasen/former'                     => array($docs, $tests),
            'anahkiasen/html-object'                => array($docs, 'phpunit.xml* tests/*'),
            'anahkiasen/rocketeer'                  => array($docs, $tests),
            'anahkiasen/underscore-php'             => array($docs, $tests),
            'barryvdh/composer-cleanup-plugin'      => array($docs, $tests),
            'barryvdh/laravel-debugbar'             => array($docs, $tests),
            'barryvdh/laravel-ide-helper'           => array($docs, $tests),
            'binarytorch/larecipe'               => array($docs, $tests, '.github package* *.js yarn.lock'),
            'bllim/datatables'                      => array($docs, $tests),
            'cartalyst/sentry'                      => array($docs, $tests),
            'classpreloader/classpreloader'         => array($docs, $tests),
            'd11wtq/boris'                          => array($docs, $tests),
            'danielstjules/stringy'                 => array($docs, $tests),
            'dflydev/markdown'                      => array($docs, $tests),
            'dnoegel/php-xdg-base-dir'              => array($docs, $tests),
            'doctrine/annotations'                  => array($docs, $tests, 'bin'),
            'doctrine/cache'                        => array($docs, $tests, 'bin'),
            'doctrine/collections'                  => array($docs, $tests),
            'doctrine/common'                       => array($docs, $tests, 'bin lib/vendor'),
            'doctrine/dbal'                         => array($docs, $tests, 'bin build* docs2 lib/vendor'),
            'doctrine/inflector'                    => array($docs, $tests),
            'doctrine/instantiator'              => array($docs, $tests, 'docs *.dist'),
            'doctrine/lexer'                     => array($docs, $tests, 'docs .github'),
            'dompdf/dompdf'                         => array($docs, $tests, 'www'),
            'dragonmantank/cron-expression'      => array($docs, $tests),
            'easycorp/easyadmin-bundle'     => array($docs, $tests),
            'erusev/parsedown-extra'             => array($docs, $tests),
            'filp/whoops'                           => array($docs, $tests),
            'friendsofphp/php-cs-fixer'          => array($docs, $tests, 'doc dev-tools *.dist'),
            'fzaninotto/faker'                   => array($docs, $tests, 'Makefile *.dist src/Faker/Provider/ar_JO src/Faker/Provider/ar_SA src/Faker/Provider/at_AT src/Faker/Provider/bg_BG src/Faker/Provider/bn_BD src/Faker/Provider/cs_CZ src/Faker/Provider/da_DK src/Faker/Provider/de_AT src/Faker/Provider/de_CH src/Faker/Provider/de_DE src/Faker/Provider/el_CY src/Faker/Provider/el_GR src/Faker/Provider/en_AU src/Faker/Provider/en_CA src/Faker/Provider/en_HK src/Faker/Provider/en_IN src/Faker/Provider/en_NG src/Faker/Provider/en_NZ src/Faker/Provider/en_PH src/Faker/Provider/en_SG src/Faker/Provider/en_UG src/Faker/Provider/en_ZA src/Faker/Provider/es_AR src/Faker/Provider/es_ES src/Faker/Provider/es_PE src/Faker/Provider/es_VE src/Faker/Provider/fa_IR src/Faker/Provider/fi_FI src/Faker/Provider/fr_BE src/Faker/Provider/fr_CA src/Faker/Provider/fr_CH src/Faker/Provider/fr_FR src/Faker/Provider/he_IL src/Faker/Provider/hr_HR src/Faker/Provider/hu_HU src/Faker/Provider/hy_AM src/Faker/Provider/id_ID src/Faker/Provider/is_IS src/Faker/Provider/it_CH src/Faker/Provider/it_IT src/Faker/Provider/ja_JP src/Faker/Provider/ka_GE src/Faker/Provider/kk_KZ src/Faker/Provider/ko_KR src/Faker/Provider/lt_LT src/Faker/Provider/lv_LV src/Faker/Provider/me_ME src/Faker/Provider/mn_MN src/Faker/Provider/ms_MY src/Faker/Provider/nb_NO src/Faker/Provider/ne_NP src/Faker/Provider/nl_BE src/Faker/Provider/nl_NL src/Faker/Provider/pl_PL src/Faker/Provider/pt_BR src/Faker/Provider/pt_PT src/Faker/Provider/ro_MD src/Faker/Provider/ro_RO src/Faker/Provider/sk_SK src/Faker/Provider/sl_SI src/Faker/Provider/sr_Cyrl_RS src/Faker/Provider/sr_Latn_RS src/Faker/Provider/sr_RS src/Faker/Provider/sv_SE src/Faker/Provider/th_TH src/Faker/Provider/tr_TR src/Faker/Provider/vi_VN src/Faker/Provider/zh_CN src/Faker/Provider/zh_TW'),
            'guzzle/guzzle'                         => array($docs, $tests),
            'guzzlehttp/guzzle'                     => array($docs, $tests),
            'guzzlehttp/oauth-subscriber'           => array($docs, $tests),
            'guzzlehttp/streams'                    => array($docs, $tests),
            'hamcrest/hamcrest-php'              => array($docs, $tests, '*.txt'),
            'imagine/imagine'                       => array($docs, $tests, 'lib/Imagine/Test'),
            'intervention/image'                    => array($docs, $tests, 'public'),
            'ircmaxell/password-compat'             => array($docs, $tests),
            'jakub-onderka/php-console-color'       => array($docs, $tests, 'build.xml example.php'),
            'jakub-onderka/php-console-highlighter' => array($docs, $tests, 'build.xml'),
            'jasonlewis/basset'                     => array($docs, $tests),
            'jeremeamia/SuperClosure'               => array($docs, $tests, 'demo'),
            'justinrainbow/json-schema'          => array($docs, $tests, 'demo *.dist'),
            'kevinrob/guzzle-cache-middleware'   => array($docs, $tests),
            'kriswallsmith/assetic'                 => array($docs, $tests),
            'laravel/framework'                     => array($docs, $tests, 'build'),
            'lcobucci/jwt'                       => array($docs, $tests, '*.dist'),
            'leafo/lessphp'                         => array($docs, $tests, 'Makefile package.sh'),
            'league/flysystem'                      => array($docs, $tests),
            'league/stack-robots'                   => array($docs, $tests),
            'liip/imagine-bundle'       => array($docs, $tests),
            'maximebf/debugbar'                     => array($docs, $tests, 'demo'),
            'mccool/laravel-auto-presenter'         => array($docs, $tests),
            'mockery/mockery'                       => array($docs, $tests),
            'monolog/monolog'                       => array($docs, $tests),
            'mrclay/minify'                         => array($docs, $tests, 'MIN.txt min_extras min_unit_tests min/builder min/config* min/quick-test* min/utils.php min/groupsConfig.php min/index.php'),
            'mtdowling/cron-expression'             => array($docs, $tests),
            'mustache/mustache'                     => array($docs, $tests, 'bin'),
            'myclabs/deep-copy'                  => array($docs, $tests, 'doc'),
            'nesbot/carbon'                         => array($docs, $tests),
            'nikic/php-parser'                      => array($docs, $tests, 'test_old'),
            'oyejorge/less.php'                     => array($docs, $tests),
            'patchwork/utf8'                        => array($docs, $tests),
            'phar-io/manifest'                   => array($docs, $tests, 'examples *.xml'),
            'phar-io/version'                    => array($docs, $tests, '*.xml'),
            'phenx/php-font-lib'                    => array($docs, $tests . 'www'),
            'phpdocumentor/reflection-docblock'     => array($docs, $tests),
            'phpoffice/phpexcel'                    => array($docs, $tests, 'Examples unitTests changelog.txt'),
            'phpseclib/phpseclib'                   => array($docs, $tests, 'build'),
            'phpstan/phpdoc-parser'              => array($docs, $tests, 'doc *.sh'),
            'phpstan/phpstan'                    => array($docs, $tests, '.github *.xml'),
            'phpunit/php-code-coverage'          => array($docs, $tests, '.github'),
            'phpunit/php-file-iterator'          => array($docs, $tests, '.github'),
            'phpunit/php-timer'                  => array($docs, $tests, '.github'),
            'phpunit/php-token-stream'           => array($docs, $tests, '.github'),
            'phpunit/phpunit'                    => array($docs, $tests, '.github .phan ChangeLog* *.xml'),
            'predis/predis'                         => array($docs, $tests, 'bin'),
            'psr/log'                               => array($docs, $tests),
            'psy/psysh'                             => array($docs, $tests),
            'queue-interop/amqp-interop'         => array($docs, $tests),
            'queue-interop/queue-interop'        => array($docs, $tests),
            'ralouphie/getallheaders'            => array($docs, $tests),
            'rcrowe/twigbridge'                     => array($docs, $tests),
            'sebastian/code-unit-reverse-lookup' => array($docs, $tests),
            'sebastian/comparator'               => array($docs, $tests, '.github'),
            'sebastian/diff'                     => array($docs, $tests, '.github'),
            'sebastian/environment'              => array($docs, $tests, '.github'),
            'sebastian/exporter'                 => array($docs, $tests, '.github'),
            'sebastian/global-state'             => array($docs, $tests, '.github'),
            'sebastian/object-enumerator'        => array($docs, $tests, '.github'),
            'sebastian/object-reflector'         => array($docs, $tests, '.github'),
            'sebastian/recursion-context'        => array($docs, $tests),
            'sebastian/resource-operations'      => array($docs, $tests, '.github build'),
            'sensio/framework-extra-bundle'     => array($docs, $tests),
            'simplepie/simplepie'                   => array($docs, $tests, 'build compatibility_test ROADMAP.md'),
            'spiral/goridge'                     => array($docs, $tests, 'examples *.go *.xml'),
            'spiral/roadrunner'                  => array($docs, $tests, 'cmd osutil service util *.mod *.go *.xml'),
            'stack/builder'                         => array($docs, $tests),
            'stof/doctrine-extensions-bundle'       => array($docs, $tests),
            'swiftmailer/swiftmailer'               => array($docs, $tests, 'build* notes test-suite create_pear_package.php'),
            'symfony/apache-pack'       => array($docs, $tests),
            'symfony/asset'     => array($docs, $tests),
            'symfony/browser-kit'                   => array($docs, $tests),
            'symfony/class-loader'                  => array($docs, $tests),
            'symfony/console'                       => array($docs, $tests),
            'symfony/css-selector'                  => array($docs, $tests),
            'symfony/debug'                         => array($docs, $tests),
            'symfony/dom-crawler'                   => array($docs, $tests),
            'symfony/event-dispatcher'              => array($docs, $tests),
            'symfony/expression-language'       => array($docs, $tests),
            'symfony/filesystem'                    => array($docs, $tests),
            'symfony/finder'                        => array($docs, $tests),
            'symfony/flex'      => array($docs, $tests),
            'symfony/form'      => array($docs, $tests),
            'symfony/framework-bundle'      => array($docs, $tests),
            'symfony/http-foundation'               => array($docs, $tests),
            'symfony/http-kernel'                   => array($docs, $tests),
            'symfony/mime'                       => array($docs, $tests),
            'symfony/monolog-bundle'        => array($docs, $tests),
            'symfony/options-resolver'           => array($docs, $tests),
            'symfony/orm-pack'      => array($docs, $tests),
            'symfony/polyfill-apcu'     => array($docs, $tests),
            'symfony/process'                       => array($docs, $tests),
            'symfony/psr-http-message-bridge'    => array($docs, $tests),
            'symfony/routing'                       => array($docs, $tests),
            'symfony/security-bundle'       => array($docs, $tests),
            'symfony/security-core'                 => array($docs, $tests),
            'symfony/security-csrf'     => array($docs, $tests),
            'symfony/security'                      => array($docs, $tests),
            'symfony/service-contracts'          => array($docs, $tests, 'Test'),
            'symfony/stopwatch'                  => array($docs, $tests),
            'symfony/swiftmailer-bundle'        => array($docs, $tests),
            'symfony/templating'        => array($docs, $tests),
            'symfony/translation-contracts'      => array($docs, $tests),
            'symfony/translation'       => array($docs, $tests),
            'symfony/twig-bundle'       => array($docs, $tests),
            'symfony/validator'     => array($docs, $tests),
            'symfony/var-dumper'                    => array($docs, $tests),
            'symfony/yaml'      => array($docs, $tests),
            'theseer/tokenizer'                  => array($docs, $tests),
            'tijsverkoyen/css-to-inline-styles'     => array($docs, $tests),
            'twig/extensions'       => array($docs, $tests),
            'twig/twig'                             => array($docs, $tests),
            'venturecraft/revisionable'             => array($docs, $tests),
            'vlucas/phpdotenv'                      => array($docs, $tests),
            'white-october/pagerfanta-bundle'       => array($docs, $tests),
            'willdurand/geocoder'                   => array($docs, $tests),
        );
    }
}
