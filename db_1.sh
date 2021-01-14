#!/bin/bash

kubectl --namespace="biznes-elektroniczny" cp ~/studenci/1/skrypt.sql biznes-db-7d46b58f4d-rm2v9:/tmp/skrypt.sql
kubectl --namespace="biznes-elektroniczny" cp ~/studenci/1/skrypt.sql biznes-db-7d46b58f4d-rm2v9:/tmp/dump.sql
kubectl --namespace="biznes-elektroniczny" cp ~/studenci/1/skrypt.sql biznes-db-7d46b58f4d-rm2v9:/tmp/import.sh
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- chmod +x /tmp/import.sh
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- /tmp/import.sh
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- rm /tmp/skrypt.sql
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- rm /tmp/dump.sql
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- rm /tmp/import.sh
