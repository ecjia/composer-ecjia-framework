#!/usr/bin/env bash

set -e
set -x

CURRENT_BRANCH="master"

function split()
{
    if [[ `uname  -a` =~ 'Darwin' ]];then
        SHA1=`./bin/splitsh-lite-darwin --prefix=$1`
        git push $2 "$SHA1:refs/heads/$CURRENT_BRANCH" -f
    else
        SHA1=`./bin/splitsh-lite --prefix=$1`
        git push $2 "$SHA1:refs/heads/$CURRENT_BRANCH" -f
    fi
}

function remote()
{
    git remote add $1 $2 || true
}

git pull origin $CURRENT_BRANCH

remote auto-login git@github.com:ecjia/composer-ecjia-auto-login.git

split 'src/Ecjia/Component/AutoLogin' auto-login