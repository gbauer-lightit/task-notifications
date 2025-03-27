<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Employee\App\Notifications;

final class NewTaskAssignmentNotification extends TaskAssignmentNotification
{
    public function getContent(): string
    {
        return 'You have been assigned a new task!';
    }

    public function getSubject(): string
    {
        return 'New task assigned!';
    }
}
