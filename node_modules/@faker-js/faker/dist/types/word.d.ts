import type { Faker } from '.';
/**
 * Module to return various types of words.
 */
export declare class Word {
    private readonly faker;
    constructor(faker: Faker);
    /**
     * Returns an adjective of random or optionally specified length.
     * If specified length is unresolvable, returns random adjective.
     *
     * @param length The optional length of word to return.
     */
    adjective(length?: number): string;
    /**
     * Returns an adverb of random or optionally specified length.
     * If specified length is unresolvable, returns random adverb.
     *
     * @param length The optional length of word to return.
     */
    adverb(length?: number): string;
    /**
     * Returns a conjunction of random or optionally specified length.
     * If specified length is unresolvable, returns random conjunction.
     *
     * @param length The optional length of word to return.
     */
    conjunction(length?: number): string;
    /**
     * Returns an interjection of random or optionally specified length.
     * If specified length is unresolvable, returns random interjection.
     *
     * @param length The optional length of word to return.
     */
    interjection(length?: number): string;
    /**
     * Returns a noun of random or optionally specified length.
     * If specified length is unresolvable, returns random noun.
     *
     * @param length The optional length of word to return.
     */
    noun(length?: number): string;
    /**
     * Returns a preposition of random or optionally specified length.
     * If specified length is unresolvable, returns random preposition.
     *
     * @param length The optional length of word to return.
     */
    preposition(length?: number): string;
    /**
     * Returns a verb of random or optionally specified length.
     * If specified length is unresolvable, returns random verb.
     *
     * @param length The optional length of word to return.
     */
    verb(length?: number): string;
}
