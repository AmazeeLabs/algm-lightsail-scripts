# ALGM Lightsail Quickstart

use the Lightsail launch script, replacing `<service>` with the service to install (EG mailhog)

```
mkdir /algm && cd /algm
git clone https://github.com/AmazeeLabs/algm-lightsail-scripts.git
apt-get update
apt-get install php-cli
/algm/algm-light-sail-scripts/builds/algm-lightsail install:<service>
```
