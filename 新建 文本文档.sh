#!/bin/bash
cd /D/personal/Desktop/project/seer2tool

read comments
git add .
git commit -m "$comments"
git push coding master
git checkout demo
git merge master
git push coding demo
git checkout master
read null