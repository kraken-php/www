#!/bin/bash
base=$(cd -P -- "$(dirname -- "$0")/.." && pwd -P)
docs=${base}/resources/docs

cd ${docs}/0.3 && git pull origin 0.3
cd ${docs}/master && git pull origin master

cd $base && php artisan docs:clear-cache