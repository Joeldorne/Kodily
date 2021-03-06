FROM php:7.0-apache
COPY src/ /var/www/html
EXPOSE 80


RUN mkdir -p /opt/watch
WORKDIR /opt

# install gulp and LiveReload:
RUN npm install -g gulp
RUN npm install gulp gulp-livereload

# generic gulpfile for a watching /opt/watch:
COPY gulpfile.js /opt/

# expose LiveReload port:
EXPOSE 35729

# start watching:
CMD ["gulp"]
