# ALGM Lightsail Quickstart

use the Lightsail launch script, replacing `<webhook-url`> with a slack webhook for notifications, and `<service>` with the service to install (EG mailhog)

```
export SLACK_WEBHOOK=<webhook-url>
mkdir /algm && cd /algm
git clone https://github.com/AmazeeLabs/algm-lightsail-scripts.git
cd /algm/algm-lightsail-scripts/
env bash install.sh <service>
```
