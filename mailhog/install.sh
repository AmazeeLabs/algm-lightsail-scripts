apt-get -y install golang-go
mkdir -p /opt/go
export GOPATH=/opt/go
go get github.com/mailhog/MailHog
cp $INSTALLPWD/mailhog.service /etc/systemd/system/mailhog.service
sudo systemctl enable mailhog
sudo systemctl start mailhog