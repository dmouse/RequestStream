<?php

/**
 * This file is part of the RequestStream package
 *
 * (c) Vitaliy Zhuk <zhuk2205@gmail.com>
 *
 * For the full copyring and license information, please view the LICENSE
 * file that was distributed with this source code
 */


namespace RequestStream\Stream\Socket;

use RequestStream\Stream\ContextInterface;

/**
 * Interface for control socket client
 */
interface SocketInterface
{
    /**
     * Add context to socket
     *
     * @param ContextInterface $context
     *
     * @return this object
     */
    public function setContext(ContextInterface $context);

    /**
     * Get context
     *
     * @return ContextInterface
     */
    public function getContext($originalResource);

    /**
     * Set transport for socket
     *
     * @param string $transport
     */
    public function setTransport($transport);

    /**
     * Get transport
     *
     * @return string
     */
    public function getTransport();

    /**
     * Set target
     *
     * @param string $target
     */
    public function setTarget($target);

    /**
     * Get target uri
     *
     * @return string
     */
    public function getTarget();

    /**
     * Set posrt for open socket
     *
     * @param int $port
     */
    public function setPort($port);

    /**
     * Get port
     *
     * @return int
     */
    public function getPort();

    /**
     * Set flag for open socket
     *
     * @param int $flags
     */
    public function setFlags($flags);

    /**
     * Get flags for open socket
     *
     * @return int
     */
    public function getFlags();

    /**
     * Get full uri for open socket
     *
     * @return string
     */
    public function getRemoteSocket();

    /**
     * Close socket connection
     */
    public function close();

    /**
     * Shutdown socket connection
     *
     * @see: http://php.net/manual/en/function.stream-socket-shutdown.php
     *
     * @param integer $mode
     */
    public function shutdown($mode = STREAM_SHUT_RDWR);

    /**
     * Blocking stream
     *
     * @param int $mode
     *
     * @return bool
     */
    public function setBlocking($mode);

    /**
     * Set timeout for stream
     *
     * @param int $second
     * @param int $milisecond
     *
     * @return bool
     */
    public function setTimeout($second, $milisecond = 0);
}