<?php

declare(strict_types=1);

namespace Bizkit\VersioningBundle\Reader;

use Bizkit\VersioningBundle\Exception\StorageException;

abstract class AbstractFileReader implements ReaderInterface
{
    /**
     * @var string
     */
    protected $file;

    /**
     * @var string
     */
    protected $prefix;

    final public function __construct(string $file, string $prefix)
    {
        $this->file = $file;
        $this->prefix = $prefix;
    }

    protected function readFileContents(): string
    {
        if (!is_file($this->file)) {
            throw new StorageException(\sprintf('Path "%s" does not exist or is not a file.', $this->file), $this->file);
        }

        if (!is_readable($this->file)) {
            throw new StorageException(\sprintf('File "%s" is not readable.', $this->file), $this->file);
        }

        if (false === $contents = @file_get_contents($this->file)) {
            throw new StorageException(\sprintf('Failed to read file "%s".', $this->file), $this->file);
        }

        return $contents;
    }
}
