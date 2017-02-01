ENTER THE MAMP DIRECTORY
========================
cd MAMP

CREATE "NEW-PROJECT" FOLDER, ENTER THE FOLDER
============================================
mkdir new-project
cd new-project

DOWNLOAD WORDPRESS
==================
wp core download

ENTER "WP-CONTENT" FOLDER
=======================
cd wp-content

ADD STANDARD PLUGINS TO "PLUGINS" FOLDER
=========================================
git clone http://tinyurl.com/ilawyerplugins plugins

ENTER "THEMES' FOLDER
====================
cd themes

DOWNLOAD THEME INTO "ILAWYER" FOLDER
=====================================
git clone http://tinyurl.com/ilawyerthemes ilawyer

ENTER "ILAWYER" THEME FOLDER
=============================
cd ilawyer

INSTALL GULP, SASS, BROWSER SYNC
=================================
npm install

RUN GULP
========
gulp