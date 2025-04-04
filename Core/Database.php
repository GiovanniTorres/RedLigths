<?php

require_once __DIR__ . '/config.php';

class Database {
    private $pdo;

        public function __construct() {
                try {
                            $this->pdo = new PDO(
                                            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                                                            DB_USER,
                                                                            DB_PASS
                                                                                        );
                                                                                                    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                                                            } catch (PDOException $e) {
                                                                                                                        die("Error de conexión: " . $e->getMessage());
                                                                                                                                }
                                                                                                                                    }

                                                                                                                                        public function get($query, $params = []) {
                                                                                                                                                $stmt = $this->pdo->prepare($query);
                                                                                                                                                        $stmt->execute($params);
                                                                                                                                                                return $stmt->fetchAll(PDO::FETCH_ASSOC);
                                                                                                                                                                    }

                                                                                                                                                                        public function set($query, $params = []) {
                                                                                                                                                                                $stmt = $this->pdo->prepare($query);
                                                                                                                                                                                        return $stmt->execute($params);
                                                                                                                                                                                            }

                                                                                                                                                                                                public function sel($query, $params = []) {
                                                                                                                                                                                                        return $this->get($query, $params);
                                                                                                                                                                                                            }

                                                                                                                                                                                                                public function update($query, $params = []) {
                                                                                                                                                                                                                        return $this->set($query, $params);
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                            }