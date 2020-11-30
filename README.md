# ALGM Lightsail Quickstart

use the Lightsail launch script, replacing `<webhook-url`> with a slack webhook for notifications, and `<service>` with the service to install (EG mailhog)

```
export SLACK_WEBHOOK=<webhook-url>
mkdir /algm && cd /algm
git clone https://github.com/AmazeeLabs/algm-lightsail-scripts.git
cd /algm/algm-lightsail-scripts/
env bash install.sh <service>
```


## Deploying changes

Connect to the ALBA AWS account and visit `https://lightsail.aws.amazon.com/ls/webapp/eu-central-1/instances/MailHog/connect`

Connect to the running instance via the ssh connect option.

When connected, `sudo -s` as root, go to `cd /algm/algm-lightsail-scripts/` and `git pull`
