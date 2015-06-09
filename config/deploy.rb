set :application, "peopleproject.us"

set :scm, :git
set :repository,  "https://github.com/jamesvillarrubia/thepeopleproject.git"

set :use_sudo, false

# the branch you want to clone (default is master)
set :branch, "master"

# the name of the deployment user-account on the server
set :user, "peopleproject"


set :deploy_to, "public_html/beta"
set :ssh_options, { :forward_agent => true}
set :deploy_via, :remote_cache
set :copy_strategy, :checkout
set :keep_releases, 3
set :normalize_asset_timestamps, false


role :app, "#{application}"
role :web, "#{application}"
role :db,  "#{application}", :primary => true


# Override and add some deploy tasks in the "deploy namespace"
namespace :deploy do
 
  desc "This is here to override the original :restart"
  task :restart, :roles => :app do
	# do nothing but override the default
  end
 
  desc "Create symlinks to shared data such as uploaded images"
  task :create_symlink, :roles => :app do
	run "rm -f public_html/beta/current && ln -s releases/#{release_name} public_html/current"
	#run "ln -s #{current_release} current2" 
	#run "ln -s #{deploy_to}/#{shared_dir}/ce_cache #{current_release}/images/ce_cache"
#    run "ln -s #{deploy_to}/#{shared_dir}/core/images #{current_release}/images"


  end
 
  desc "Set the correct permissions for the config files and cache folder"
  task :set_permissions, :roles => :app do
#    run "chmod 666 #{current_release}/index.php"
#    run "chmod 666 #{current_release}/system/expressionengine/config/config.php"
#    run "sudo chmod -R 777 #{current_release}/system/expressionengine/cache/"
#    run "chmod 777 #{current_release}/system/expressionengine/templates/"
#    run "chmod 777 #{current_release}/themes/site_themes/dem2015/templates"
#    run "sudo chmod -R 777 #{current_release}/images"
	#run "chmod -R 777 #{current_release}/images/remote"
	#run "chmod -R 777 #{current_release}/images/remote/http_s3.amazonaws.com"
	#run "chmod -R 777 #{current_release}/images/remote/http_s3.amazonaws.com/uploads.democrats.org/"
  end

end

# Deployment process
after "deploy", "deploy:create_symlink", "deploy:set_permissions", "deploy:cleanup"