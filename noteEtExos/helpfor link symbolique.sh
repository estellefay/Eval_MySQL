
sudo su
sudo apt-get install -y phpmyadmin # install phpmyadmin 
sudo nano /etc/php/7.0/apache2/php.ini  # ouvrir le fichier pour afficher les erreurs ( faire en ligne de commandes)
sudo service apache2 restart
sudo rm -r /var/www/html/ # sup fichier
sudo ln -s /vagrant/web /var/www/html # lien symbolique 
ls -l /var/www/html # Vérifier se qu'il y as dans le liens sympolique 
