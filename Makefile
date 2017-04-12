SHELL := /bin/bash

.PHONY: all install prepare build watch publish pdf epub mobi clean

all: install build

install: # install gitbook-cli
	npm install 

prepare:
	npm run gitbook:prepare

build:
	npm run gitbook:build

watch:
	npm run gitbook:watch

pdf:
	npm run gitbook:pdf

epub:
	npm run gitbook:epub

mobi:
	npm run gitbook:mobi

publish: build pdf epub mobi
	cd _book && \
	git config --global user.name "publisher" && \
	git config --global user.email "publisher@git.hub" && \
	git init && \
	git commit --allow-empty -m 'update gh-pages' && \
	git checkout -b gh-pages && \
	git add . && \
	git commit -am 'update gh-pages' && \
	git push https://github.com/tumregels/design-patterns-for-humans gh-pages --force

clean:
	rm -rf _book
	rm -rf node_modules

