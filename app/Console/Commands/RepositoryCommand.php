<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RepositoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Model and Repository successfully';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $name = $this->argument('name');

        $this->repository($name);
        $this->model($name);
        $this->repositoryInterface($name);
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/{$type}.stub"));
    }

    protected function model($name)
    {
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Model')
        );
        file_put_contents(app_path("Models/{$name}.php"), $modelTemplate);
    }

    protected function repository($name)
    {
        $repositoryTemplate = str_replace(
            ['{{modelName}}'],
            [ $name ],
            $this->getStub('Repository')
        );
        @mkdir(app_path("Repositories/{$name}"));
        file_put_contents(app_path("Repositories/{$name}/{$name}Repository.php"), $repositoryTemplate);
    }

    protected function repositoryInterface($name)
    {
        $repositoryInterfaceTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('RepositoryInterface')
        );
        @mkdir(app_path("Repositories/{$name}"));
        file_put_contents(
            app_path("Repositories/{$name}/{$name}RepositoryInterface.php"),
            $repositoryInterfaceTemplate
        );
    }
}
