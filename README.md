Redis Demo
===========

simple examples of redis, 

list
----
- cache of sql result, like
    - Product::all

trouble shooting
----------------
if errors shows up, this could be helpful
```
config set stop-writes-on-bgsave-error no
```