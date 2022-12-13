<?php
if ($this->logger instanceof DatabaseLogger) {
    $this->logger->conectar();
}

$this->logger->log('Fatura enviada com sucesso!');