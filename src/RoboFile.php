<?php

/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    function hello($world)
    {
        $this->say('Hello, ' . $world . '!');
    }

    function assets()
    {
        // admin
        $this->taskFilesystemStack()
            ->mkdir('public/css')
            ->run();
        $this->taskConcat([
            'node_modules/basscss/css/basscss.min.css'
        ])
            ->to('public/css/admin.min.css')
            ->run();
        $this->compile_sass();
    }

    function compile_sass()
    {
        // `$ bundle install --path vendor/bundle`

        $this->taskExec('bundle exec sass resources/assets/scss/app.scss:public/css/app.css')
            ->run();
    }
}