cp $INSTALLPWD/cron.d/blue-value /etc/cron.d/blue-value
chmod +x $INSTALLPWD/deploy

curl -L "https://github.com/amazeeio/lagoon-cli/releases/download/0.9.1/lagoon-cli-0.9.1-linux-amd64" -o /usr/local/bin/lagoon
chmod +x /usr/local/bin/lagoon
