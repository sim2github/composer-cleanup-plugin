<?php

namespace Barryvdh\Composer;

class CleanupRules
{
    public static function getRules()
    {
        // Default patterns for common files
        $docs = 'README* CHANGELOG* FAQ* CONTRIBUTING* CONTRIBUTORS* HISTORY* UPGRADING* SECURITY* UPGRADE* *.md *.markdown package* demo example examples doc docs readme* changelog* composer* .github .travis .gitignore .gitattributes';
        $tests = '.travis.yml .scrutinizer.yml phpcs.xml* phpcs.php .php_cs* phpunit.xml* phpunit.php phpbench.json* phpstan.neon* psalm.* test tests Tests travis patchwork.json';

        return array(
            'anahkiasen/former'                     => array($docs, $tests),
            'anahkiasen/html-object'                => array($docs, 'phpunit.xml* tests/*'),
            'anahkiasen/rocketeer'                  => array($docs, $tests),
            'anahkiasen/underscore-php'             => array($docs, $tests),
            'barryvdh/composer-cleanup-plugin'      => array($docs, $tests),
            'barryvdh/laravel-debugbar'             => array($docs, $tests),
            'barryvdh/laravel-ide-helper'           => array($docs, $tests),
            'behat/transliterator'           => array($docs, $tests),
            'behat/transliterator' => array($docs, $tests),
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
            'doctrine/doctrine-bundle' => array($docs, $tests),
            'doctrine/doctrine-migrations-bundle' => array($docs, $tests),
            'doctrine/event-manager' => array($docs, $tests),
            'doctrine/inflector'                    => array($docs, $tests),
            'doctrine/instantiator'              => array($docs, $tests, 'docs *.dist'),
            'doctrine/lexer'                     => array($docs, $tests, 'docs .github'),
            'doctrine/migrations' => array($docs, $tests),
            'doctrine/orm' => array($docs, $tests),
            'doctrine/persistence' => array($docs, $tests),
            'doctrine/reflection' => array($docs, $tests),
            'dompdf/dompdf'                         => array($docs, $tests, 'www'),
            'dragonmantank/cron-expression'      => array($docs, $tests),
            'easycorp/easyadmin-bundle'     => array($docs, $tests, 'yarn.lock webpack.config.js'),
            'egulias/email-validator' => array($docs, $tests),
            'erusev/parsedown-extra'             => array($docs, $tests),
            'filp/whoops'                           => array($docs, $tests),
            'friendsofphp/php-cs-fixer'          => array($docs, $tests, 'doc dev-tools *.dist'),
            'fzaninotto/faker'                   => array($docs, $tests, 'Makefile *.dist src/Faker/Provider/{ar_JO,ar_SA,at_AT,bg_BG,bn_BD,cs_CZ,da_DK,de_AT,de_CH,de_DE,el_CY,el_GR,en_AU,en_CA,en_HK,en_IN,en_NG,en_NZ,en_PH,en_SG,en_UG,en_ZA,es_AR,es_ES,es_PE,es_VE,fa_IR,fi_FI,fr_BE,fr_CA,fr_CH,fr_FR,he_IL,hr_HR,hu_HU,hy_AM,id_ID,is_IS,it_CH,it_IT,ja_JP,ka_GE,kk_KZ,ko_KR,lt_LT,lv_LV,me_ME,mn_MN,ms_MY,nb_NO,ne_NP,nl_BE,nl_NL,pl_PL,pt_BR,pt_PT,ro_MD,ro_RO,sk_SK,sl_SI,sr_Cyrl_RS,sr_Latn_RS,sr_RS,sv_SE,th_TH,tr_TR,vi_VN,zh_CN,zh_TW}'),
            'gedmo/doctrine-extensions' => array($docs, $tests),
            'guzzle/guzzle'                         => array($docs, $tests),
            'guzzlehttp/guzzle'                     => array($docs, $tests),
            'guzzlehttp/oauth-subscriber'           => array($docs, $tests),
            'guzzlehttp/streams'                    => array($docs, $tests),
            'hamcrest/hamcrest-php'              => array($docs, $tests, '*.txt'),
            'imagine/imagine'                       => array($docs, $tests, 'lib/Imagine/Test'),
            'imagine/imagine' => array($docs, $tests),
            'intervention/image'                    => array($docs, $tests, 'public'),
            'ircmaxell/password-compat'             => array($docs, $tests),
            'jakub-onderka/php-console-color'       => array($docs, $tests, 'build.xml example.php'),
            'jakub-onderka/php-console-highlighter' => array($docs, $tests, 'build.xml'),
            'jasonlewis/basset'                     => array($docs, $tests),
            'jdorn/sql-formatter' => array($docs, $tests),
            'jeremeamia/SuperClosure'               => array($docs, $tests, 'demo'),
            'justinrainbow/json-schema'          => array($docs, $tests, 'demo *.dist'),
            'kevinrob/guzzle-cache-middleware'   => array($docs, $tests),
            'kriswallsmith/assetic'                 => array($docs, $tests),
            'laminas/laminas-code' => array($docs, $tests),
            'laminas/laminas-eventmanager' => array($docs, $tests),
            'laminas/laminas-zendframework-bridge' => array($docs, $tests),
            'laravel/framework'                     => array($docs, $tests, 'build'),
            'lcobucci/jwt'                       => array($docs, $tests, '*.dist'),
            'leafo/lessphp'                         => array($docs, $tests, 'Makefile package.sh'),
            'league/flysystem'                      => array($docs, $tests),
            'league/stack-robots'                   => array($docs, $tests),
            'liip/imagine-bundle'       => array($docs, $tests, 'Resources/doc'),
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
            'ocramius/package-versions' => array($docs, $tests),
            'ocramius/proxy-manager' => array($docs, $tests, '.phpstorm.meta.php'),
            'oyejorge/less.php'                     => array($docs, $tests),
            'pagerfanta/pagerfanta' => array($docs, $tests),
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
            'psr/cache' => array($docs, $tests),
            'psr/container' => array($docs, $tests),
            'psr/log'                               => array($docs, $tests, 'Test'),
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
            'swiftmailer/swiftmailer'               => array($docs, $tests, 'build* notes test-suite create_pear_package.php CHANGES'),
            'symfony/apache-pack'       => array($docs, $tests),
            'symfony/asset'     => array($docs, $tests),
            'symfony/browser-kit'                   => array($docs, $tests),
            'symfony/cache-contracts' => array($docs, $tests),
            'symfony/cache' => array($docs, $tests),
            'symfony/class-loader'                  => array($docs, $tests),
            'symfony/config' => array($docs, $tests),
            'symfony/console'                       => array($docs, $tests),
            'symfony/css-selector'                  => array($docs, $tests),
            'symfony/debug'                         => array($docs, $tests),
            'symfony/dependency-injection' => array($docs, $tests),
            'symfony/doctrine-bridge' => array($docs, $tests),
            'symfony/dom-crawler'                   => array($docs, $tests),
            'symfony/event-dispatcher-contracts' => array($docs, $tests),
            'symfony/event-dispatcher'              => array($docs, $tests),
            'symfony/expression-language'       => array($docs, $tests),
            'symfony/filesystem'                    => array($docs, $tests),
            'symfony/finder'                        => array($docs, $tests),
            'symfony/flex'      => array($docs, $tests),
            'symfony/form'      => array($docs, $tests),
            'symfony/framework-bundle'      => array($docs, $tests),
            'symfony/http-foundation'               => array($docs, $tests),
            'symfony/http-kernel'                   => array($docs, $tests),
            'symfony/inflector' => array($docs, $tests),
            'symfony/intl' => array($docs, $tests),
            'symfony/mime'                       => array($docs, $tests),
            'symfony/monolog-bridge' => array($docs, $tests),
            'symfony/monolog-bundle'        => array($docs, $tests),
            'symfony/options-resolver'           => array($docs, $tests),
            'symfony/orm-pack'      => array($docs, $tests),
            'symfony/orm-pack' => array($docs, $tests),
            'symfony/polyfill-apcu'     => array($docs, $tests),
            'symfony/polyfill-intl-icu' => array($docs, $tests),
            'symfony/polyfill-intl-idn' => array($docs, $tests),
            'symfony/polyfill-mbstring' => array($docs, $tests),
            'symfony/polyfill-php72' => array($docs, $tests),
            'symfony/polyfill-php73' => array($docs, $tests),
            'symfony/process'                       => array($docs, $tests),
            'symfony/property-access' => array($docs, $tests),
            'symfony/psr-http-message-bridge'    => array($docs, $tests),
            'symfony/routing'                       => array($docs, $tests),
            'symfony/security-bundle'       => array($docs, $tests),
            'symfony/security-core'                 => array($docs, $tests),
            'symfony/security-csrf'     => array($docs, $tests),
            'symfony/security-guard' => array($docs, $tests),
            'symfony/security'                      => array($docs, $tests),
            'symfony/service-contracts'          => array($docs, $tests, 'Test'),
            'symfony/stopwatch'                  => array($docs, $tests),
            'symfony/swiftmailer-bundle'        => array($docs, $tests),
            'symfony/templating'        => array($docs, $tests),
            'symfony/translation-contracts'      => array($docs, $tests),
            'symfony/translation'       => array($docs, $tests),
            'symfony/twig-bridge' => array($docs, $tests),
            'symfony/twig-bundle'       => array($docs, $tests),
            'symfony/validator'     => array($docs, $tests),
            'symfony/var-dumper'                    => array($docs, $tests),
            'symfony/var-exporter' => array($docs, $tests),
            'symfony/yaml'      => array($docs, $tests),
            'theseer/tokenizer'                  => array($docs, $tests),
            'tijsverkoyen/css-to-inline-styles'     => array($docs, $tests),
            'twig/extensions'       => array($docs, $tests),
            'twig/twig'                             => array($docs, $tests, 'drupal_test.sh'),
            'venturecraft/revisionable'             => array($docs, $tests),
            'vlucas/phpdotenv'                      => array($docs, $tests),
            'webimpress/safe-writer' => array($docs, $tests),
            'white-october/pagerfanta-bundle'       => array($docs, $tests),
            'willdurand/geocoder'                   => array($docs, $tests),
        );
    }
}
