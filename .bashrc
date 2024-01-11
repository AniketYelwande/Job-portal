# .bashrc

# User specific aliases and functions

alias rm='rm -i'
alias cp='cp -i'
alias mv='mv -i'

# Source global definitions
if [ -f /etc/bashrc ]; then
	. /etc/bashrc
fi


export CATALINA_HOME=$HOME/tomcat
export PATH=$PATH:$HOME/tomcat/bin
export CATALINA_HOME PATH
export CATALINA_TMPDIR=$HOME/tomcat/temp
export CATALINA_BASE=$HOME/tomcat

export CLASSPATH=$CLASSPATH:/projects/postgresql-8.2dev-503.jdbc3.jar
export CLASSPATH=$CLASSPATH:/projects/jmf-2.1.1e.jar
export CLASSPATH=$CLASSPATH:/projects/mysql-connector-java-5.1.6.jar
export CLASSPATH=$CLASSPATH:$HOME/mysql-connector-java-5.1.6.jar

export CLASSPATH=$CLASSPATH:/projects/activation.jar
export CLASSPATH=$CLASSPATH:/projects/mail.jar

export CLASSPATH=$CLASSPATH:$HOME/tomcat/lib/servlet-api.jar
export CLASSPATH=$CLASSPATH:$HOME/tomcat/lib/postgresql-8.2dev-503.jdbc3.jar
export CLASSPATH=$CLASSPATH:$HOME/tomcat/lib/mysql-connector-java-5.1.6.jar


export CLASSPATH=$CLASSPATH:$HOME
export CLASSPATH
