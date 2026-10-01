<?php

namespace Laravel\Ai\Events;

use Laravel\Ai\Contracts\Providers\TextProvider;
use Throwable;

class ConversationTitleFailed
{
    /**
     * @param  string|null  $parentInvocationId  The invocation of the agent run that opened the conversation.
     * @param  string|null  $conversationId  The conversation being titled, or null when the store assigns its own ID.
     * @param  string  $prompt  The message sent to the provider to be titled.
     * @param  float  $time  Wall time spent in the provider call before it failed, in milliseconds.
     */
    public function __construct(
        public string $invocationId,
        public ?string $parentInvocationId,
        public ?string $conversationId,
        public TextProvider $provider,
        public string $model,
        public string $prompt,
        public Throwable $exception,
        public float $time,
    ) {}
}
