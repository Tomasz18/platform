<?php declare(strict_types=1);

namespace Shopware\Tests\Unit\Core\Content\Media\Core\Event;

use PHPUnit\Framework\TestCase;
use Shopware\Core\Content\Media\Core\Event\UpdateThumbnailPathEvent;

/**
 * @internal
 *
 * @covers \Shopware\Core\Content\Media\Core\Event\UpdateThumbnailPathEvent
 */
class UpdateThumbnailPathEventTest extends TestCase
{
    public function testGetIterator(): void
    {
        $event = new UpdateThumbnailPathEvent(['foo', 'bar']);

        static::assertSame(['foo', 'bar'], iterator_to_array($event->getIterator()));
    }
}
