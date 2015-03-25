#!/bin/bash


#Add the following lines to your bash_profile
# tpp(){
#	cd $HOME/path/to/folder
#	sh update.sh $1 $2 $3 $4
# }

#Edit the following lines to your instance
myloc="$HOME/MAMP_Root/thepeopleproject"
mymysqldump="/Applications/MAMP/Library/bin"
mymysql="/Applications/MAMP/Library/bin"


if [[ "$1" == "push" && "$2" == "to" && "$3" == "beta" ]]; then

	eval cd "${myloc}"
	echo ""
	echo "\033[33;1m  *  Pushing to FTP..\033[0m"

	echo "\033[33;1m  *  Deploying Staging Files from git... \033[0m"
	git ftp push -u prosperoftp --passwd '!Tc$eySOZb' ftp://03a806b.netsolhost.com/htdocs/beta/ -v
	git ftp init -u prosperoftp --passwd '!Tc$eySOZb' ftp://03a806b.netsolhost.com/htdocs/beta/ -v
	echo ""
	echo "\033[32;1m**** And you're done!\033[0m"
	echo ""

elif [[ "$1" == "push" && "$2" == "to" && "$3" == "prod" ]]; then
	echo ''

elif [[ "$1" == "goto" ]]; then
	eval cd "${myloc}"
	echo ''
	
elif [[ "$1" == "pull" && "$2" == "to" && "$3" == "stage" ]]; then
	echo ''

elif [[ "$1" == "pull" && "$2" == "to" && "$3" == "local" ]]; then
	echo ''

elif [ "$1" == "grunt" ]; then
	eval cd $myloc/css
	grunt
	echo "\033[32;1m**** Grunting locally! \033[0m"

elif [ "$1" == "commit" ]; then
	eval cd "${myloc}"
	git add .  
	read -p "Commit description: " desc  
	git commit -m "$desc"
	git push origin master

elif [[ "$1" == "backup" && "$2" == "stage" ]]; then

	echo ""

elif [[ "$1" == "backup" && "$2" == "local" ]]; then
	
	echo ""

elif [[ "$1" == "backup" && "$2" == "prod" ]]; then
	
	echo ""

elif [[ "$1" == "deploy" && "$2" == "to" && "$3" == "stage" ]]; then
	cap deploy
	echo ""

elif [ "$1" == "help" ]; then
	echo "\033[32;1m  *  Try tpp push to prod    	- Pushes stable branch and settings tables to production  \033[0m"
	echo "\033[32;1m  *      							- Fires a Jenkins test and will roll back both the commit and DB changes if tests fail \033[0m"
	echo "\033[32;1m  *      tpp push to stage  		- Pushes master branch and settings tables to staging     \033[0m"
	echo "\033[32;1m  *      tpp pull to local   	- Pulls production content tables to local \033[0m"
	echo "\033[32;1m  *      tpp pull to stage   	- Pulls production content tables to stage \033[0m"
	echo "\033[32;1m  *      tpp grunt           	- Starts your local instance of grunt \033[0m"
	echo "\033[32;1m  *      tpp backup stage    	- Builds a DB backup of your staging environment \033[0m"
	echo "\033[32;1m  *      tpp backup local    	- Builds a DB backup of your local environment \033[0m"
	echo "\033[32;1m  *      tpp backup prod     	- Builds a DB backup of your production environment \033[0m"
	echo "\033[32;1m  *      tpp commit to master	- Commits your local branch to the remote master branch \033[0m"
	echo "\033[32;1m  *      tpp commit to develop	- Commits your local branch to the remote develop branch \033[0m"
	echo "\033[32;1m  *      tpp commit to stable	- Commits the REMOTE master branch to the REMOTE stable branch \033[0m"
	echo "\033[32;1m  *      tpp deploy to stage     - Capistrano deploys master branch WITHOUT DB to staging environment \033[0m"
	echo "\033[32;1m  *      tpp deploy to prod      - Capistrano deploys stable branch WITHOUR DB to production environment \033[0m"
	echo "\033[32;1m  *      							- Fires a Jenkins test and will only commit if test on master is correct \033[0m"
	echo "\033[32;1m  *      tpp help				- Lists all the commands \033[0m"
	echo "\033[32;1m  *      tpp help				- Lists all the commands \033[0m"

elif [ "$1" == "chuck" ]; then
	echo ''

elif [ "$1"  == "" ]; then
	eval cd "${myloc}"
else 
	echo "\033[31;1m**** That is not a known command! \033[0m"
	echo "\033[31;1m**** Use \"tpp help\" to see more commands.  \033[0m"
fi



##
#	Production runs off of stable branch
#	Staging runs off of master branch
#	Local runs off of develop or some dev feature branch
#	Content lives in prodDB
#	Content is always pulled from prodDB to staging and to local
#	TODO - ask Sunil about testing options
#


