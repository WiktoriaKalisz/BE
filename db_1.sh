#!/bin/bash

kubectl --namespace="biznes-elektroniczny" cp ~studenci/1/skrypt.sql biznes-db-7d46b58f4d-rm2v9:/tmp/be-1/skrypt.sql
kubectl --namespace="biznes-elektroniczny" cp ~studenci/1/skrypt.sql biznes-db-7d46b58f4d-rm2v9:/tmp/be-1/dump.sql
kubectl --namespace="biznes-elektroniczny" cp ~studenci/1/skrypt.sql biznes-db-7d46b58f4d-rm2v9:/tmp/be-1/import.sh
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- chmod +x /tmp/be-1/import.sh
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- /tmp/be-1/import.sh
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- rm /tmp/be-1/skrypt.sql
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- rm /tmp/be-1/dump.sql
kubectl --namespace="biznes-elektroniczny" exec --stdin --tty biznes-db-7d46b58f4d-rm2v9 -- rm /tmp/be-1/import.sh