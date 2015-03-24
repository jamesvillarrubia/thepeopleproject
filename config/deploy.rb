set :application, "peopleproject.us"

set :scm, :git
set :repository,  "https://github.com/jamesvillarrubia/thepeopleproject.git"
set :user, "peopleproject"

set :use_sudo, false

# the branch you want to clone (default is master)
set :branch, "master"

# the name of the deployment user-account on the server
set :user, "peopleproject"


set :deploy_to, "public_html/beta"
set :ssh_options, { :forward_agent => true }
set :deploy_via, :remote_cache
set :copy_strategy, :checkout
set :keep_releases, 3
set :normalize_asset_timestamps, false


role :app, "#{application}"
role :web, "#{application}"
role :db,  "#{application}", :primary => true

after "deploy:restart", "deploy:cleanup"