Ansible playbook for personal server
===

* Initial install:
```
  virtualenv venv
  pip --upgrade -r requirements.txt
```

* On the host side:
  * The user "deploy" needs to exists
  * It needs to have the corresponding public key installed
  * It needs to have "sudo" rights without password. The simplest way is to add the following to `/etc/sudoders`: `deploy ALL=(ALL) NOPASSWD:ALL`

* Run playbook:
```
ansible-playbook --become --ask-vault-pass --user=deploy --private-key=[private key] --inventory-file=hosts playbook.yml
```

