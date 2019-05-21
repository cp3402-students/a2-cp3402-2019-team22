
##  The Coffee Can Cafe Theme Repository
**This repository contains the contents of the wp-content folder**


**Production server (live site):** [107.20.63.102](http://107.20.63.102/)
**Staging server:** [34.229.102.181](http://34.229.102.181/)
## Contributors
 1. Matthew Spina
 2. Travis Wilson(1) 
 3.  Jonathan Hall
 4.  Heylon White
 5.  Madison James
## Development environment setup
Follow these instructions in order to setup the local development environment used for this project

**1. Git**

Git is used as version control for this project.

**Download**

*Windows:* [https://gitforwindows.org/](https://gitforwindows.org/)

*Mac:* ???

**Install**

Use default settings

**2. VirtualBox**

VirtualBox is used by vagrant to host our local development environment.

**Download**

[https://www.virtualbox.org/wiki/Downloads](https://www.virtualbox.org/wiki/Downloads)

**Install**

Use default settings

**3. Vagrant**

Vagrant is used to host our local development environment.

**Download**

[https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html)

**Install**

Use default options - Restart PC

**4. Hosts updater for Vagrant**

**Install**

*Run command:* `vagrant plugin install vagrant-hostsupdater`

**5. vccw**

vccw is used for our local development environment. vccw consists of a Linux (16.04.3 LTS) VM (Virtual Machine) containing the web-server and related components necessary to test our WordPress site locally.

**Download**

*Clone:*  `git clone https://github.com/HeylonNHP/vccw.git`

**Install**

*Run:* `vagrant up`

**Final notes:**

The locally hosted copy of WordPress can be viewed here: [http://vccw.test](http://vccw.test)

## How to contribute
??? - Git workflow instructions here:
- Cloning the git repository **Done**
- Collaboration instructions (e.g. use of branches, when/what/how to commit, dealing with merge conflicts)

**Cloning the repository:**
 1. Navigate to the `vccw/wordpress` directory in the terminal/git bash
 2. Run: `rm -f -r wp-content`
 3. Clone repo into wp-content: `git clone https://github.com/cp3402-students/a2-cp3402-2019-team22.git wp-content`

## Deployment instructions
 1. SSH into vccw installation
 2. Use wordmove to push and pull WordPress files to and from local dev environment and remote servers

**Setting up passwordless SSH for wordmove**
 1. Run: `vagrant ssh` to SSH into the vccw Vagrant box
 2. Run: `ssh-keygen -t rsa` - this generates your public/private key pair. Use default settings (Just press Enter 3 times).
 3. Navigate to the directory where the key files are generated: `cd ~/.ssh`
 4. Open `id_rsa.pub` in your favourite terminal text editor, then copy and paste the contents into our Slack channel. Either *Heylon White* or *Matthew Spina* will add your public key to the Staging and Production servers
 
 **Using wordmove to push and pull content from the Staging/Production servers**
  1. Run: `vagrant ssh` to SSH into the vccw Vagrant box
  2. Navigate to the WordPress wp-content directory inside the vccw Vagrant box: `cd /vagrant/wordpress/wp-content`
  3. Pushing the database: `wordmove push -d -e staging` or `wordmove push -d -e production`
  4. Pulling the database: `wordmove pull -d -e staging` or `wordmove pull -d -e production`
  5. Pushing/pulling the theme is exactly the same, just replace `-d` with `-t`