<?php

namespace OpenAI\Contracts;

use OpenAI\Resources\Contracts\AudioContract;
use OpenAI\Resources\Contracts\ChatContract;
use OpenAI\Resources\Contracts\CompletionsContract;
use OpenAI\Resources\Contracts\EditsContract;
use OpenAI\Resources\Contracts\EmbeddingsContract;
use OpenAI\Resources\Contracts\FilesContract;
use OpenAI\Resources\Contracts\FineTunesContract;
use OpenAI\Resources\Contracts\ImagesContract;
use OpenAI\Resources\Contracts\ModelsContract;
use OpenAI\Resources\Contracts\ModerationsContract;

interface Client
{
    /**
     * Given a prompt, the model will return one or more predicted completions, and can also return the probabilities
     * of alternative tokens at each position.
     *
     * @see https://beta.openai.com/docs/api-reference/completions
     */
    public function completions(): CompletionsContract;

    /**
     * Given a chat conversation, the model will return a chat completion response.
     *
     * @see https://platform.openai.com/docs/api-reference/chat
     */
    public function chat(): ChatContract;

    /**
     * Get a vector representation of a given input that can be easily consumed by machine learning models and algorithms.
     *
     * @see https://beta.openai.com/docs/api-reference/embeddings
     */
    public function embeddings(): EmbeddingsContract;

    /**
     * Learn how to turn audio into text.
     *
     * @see https://platform.openai.com/docs/api-reference/audio
     */
    public function audio(): AudioContract;

    /**
     * Given a prompt and an instruction, the model will return an edited version of the prompt.
     *
     * @see https://beta.openai.com/docs/api-reference/edits
     */
    public function edits(): EditsContract;

    /**
     * Files are used to upload documents that can be used with features like Fine-tuning.
     *
     * @see https://beta.openai.com/docs/api-reference/files
     */
    public function files(): FilesContract;

    /**
     * List and describe the various models available in the API.
     *
     * @see https://beta.openai.com/docs/api-reference/models
     */
    public function models(): ModelsContract;

    /**
     * Manage fine-tuning jobs to tailor a model to your specific training data.
     *
     * @see https://beta.openai.com/docs/api-reference/fine-tunes
     */
    public function fineTunes(): FineTunesContract;

    /**
     * Given a input text, outputs if the model classifies it as violating OpenAI's content policy.
     *
     * @see https://beta.openai.com/docs/api-reference/moderations
     */
    public function moderations(): ModerationsContract;

    /**
     * Given a prompt and/or an input image, the model will generate a new image.
     *
     * @see https://beta.openai.com/docs/api-reference/images
     */
    public function images(): ImagesContract;
}
