=========================
ENTER THE MAMP DIRECTORY
=========================
cd MAMP

==============================================
CREATE "NEW-PROJECT" FOLDER, ENTER THE FOLDER
==============================================
mkdir new-project
cd new-project

===================
DOWNLOAD WORDPRESS
===================
(this only works if you have WP-CLI installed - http://wp-cli.org)
wp core download

==========================
ENTER "WP-CONTENT" FOLDER
==========================
cd wp-content

=========================================
ADD STANDARD PLUGINS TO "PLUGINS" FOLDER
=========================================
git clone http://tinyurl.com/ilawyerplugins plugins-new
(delete out old plugins folder and rename "plugins-new" to "plugins")

======================
ENTER "THEMES' FOLDER
======================
cd themes

=====================================
DOWNLOAD THEME INTO "ILAWYER" FOLDER
=====================================
git clone http://tinyurl.com/ilawyertheme ilawyer

=============================
ENTER "ILAWYER" THEME FOLDER
=============================
cd ilawyer

=================================
INSTALL GULP, SCSS, BROWSER SYNC
=================================
npm install

=========
RUN GULP
=========
gulp