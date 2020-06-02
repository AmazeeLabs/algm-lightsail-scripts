apt-get -y install golang-go
mkdir -p /opt/go
export GOPATH=/opt/go
go get github.com/mailhog/MailHog
cp $INSTALLPWD/mailhog.service /etc/systemd/system/mailhog.service
sudo systemctl enable mailhog
sudo systemctl start mailhog

cp $INSTALLPWD/cron/mailhog /etc/cron.daily/
chmod +x /etc/cron.daily/mailhog

MHPID=`pidof MailHog`
SLACK_WEBHOOK=`cat /algm/SLACK_WEBHOOK`

if [ ! -z "$SLACK_WEBHOOK" ]; then
  if [ ! -z "$MHPID" ]; then
    /usr/bin/curl -X POST --data-urlencode "payload={\"channel\": \"#algm-mailhog\", \"username\": \"ALGM Lightsail\", \"text\": \":pig: MailHog pid is $MHPID.\", \"icon_emoji\": \":pig:\"}" $SLACK_WEBHOOK
  else
    /usr/bin/curl -X POST --data-urlencode "payload={\"channel\": \"#algm-mailhog\", \"username\": \"ALGM Lightsail\", \"text\": \":pig: MailHog is not running.\", \"icon_emoji\": \":pig:\"}" $SLACK_WEBHOOK
  fi
else
  echo "There is no SLACK_WEBHOOK to notify ALGM" | logger
fi