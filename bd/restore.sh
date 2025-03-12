##### restore.sh
#!/bin/bash
docker compose exec basededatos bash -c "mysql -u user -p minhabd < /backup/backup.sql"