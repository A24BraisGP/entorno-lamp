##### restore.sh
#!/bin/bash
docker compose exec compose.lamp.dev.yml bash -c "mysql -u root -pbraisgp123. bd" < /backup/backup.sql