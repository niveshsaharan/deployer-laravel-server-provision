# deployer server provision script

- Clone the repo or download a zip
- Copy .deployer.example as .deployer in your project root directory
- Copy deploy.php
- Configure `.deployer/config.php` with your own configurations
- Configure `.deployer/.hosts.yml` with your server IP address
- Paste your own Public (id_rsa.pub) and Private SSH key (id_rsa) files in .deployer/.ssh directory
- Change permission for `.deployer/.ssh/id_rsa` and `.deployer/.ssh/id_rsa.pub` to 400
- Run `dep server:provision production` if you just need to provision your server or `dep deploy production` if you need to deploy your project as well



# Checklist:
- [ ] Your domain should point to your server IP before you run the script
- [ ] `.deployer/.hosts.yml` file must have your domain or IP address for `hostname:` 
- [ ] `.deployer/config.php` file must have the same domain you pointed to your server's ip


Use at your own risk
