ZF Service Layer (zend framework)
=================================

Example of how to create a simple service layer within Zend Framework to handle business logic.

By injecting different datasources (i.e. webservice, database, mock) from the service layer into the mapping layer
(mapper) this brings huge flexibility - especially for unit testing & end-to-end testing (i.e. selenium). This will
allow the developer/tester/automated tool to easily test boundary conditions as well as happy path.

This process can be improved by using a DIC (dependency injection container, i.e. ZF2).


Tutorial
========
[Podcast tutorials on youtube](http://www.youtube.com/playlist?list=PL4lTrYcDuAfzwlro1ypv3uFUgqdyk0vMm&feature=view_all)