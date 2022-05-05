import type { Faker } from '.';
/**
 * Generator method for combining faker methods based on string input.
 */
export declare class Fake {
    private readonly faker;
    constructor(faker: Faker);
    /**
     * Generator method for combining faker methods based on string input.
     *
     * This will check the given string for placeholders and replace them by calling the specified faker method.
     * E.g. the input `Hi, my name is {{name.firstName}}!`,
     * will use the `faker.name.firstName()` method to resolve the placeholder.
     * It is also possible to combine static text with placeholders,
     * since only the parts inside the double braces `{{placeholder}}` are replaced.
     * The replacement process is repeated until all placeholders have been replaced by static text.
     * It is also possible to provide the called method with additional parameters by adding parentheses.
     * This method will first attempt to parse the parameters as json, if that isn't possible it will use them as string.
     * E.g. `You can call me at {{phone.phoneNumber(+!# !## #### #####!)}}.`
     * Currently it isn't possible to set more than a single parameter this way.
     *
     * Please note that is NOT possible to use any non-faker methods or plain js script in there.
     *
     * @param str The format string that will get interpolated. May not be empty.
     *
     * @see faker.helpers.mustache() to use custom functions for resolution.
     *
     * @example
     * faker.fake('{{name.lastName}}') // 'Barrows'
     * faker.fake('{{name.lastName}}, {{name.firstName}} {{name.suffix}}') // 'Durgan, Noe MD'
     * faker.fake('This is static test.') // 'This is static test.'
     * faker.fake('Good Morning {{name.firstName}}!') // 'Good Morning Estelle!'
     * faker.fake('You can call me at {{phone.phoneNumber(!## ### #####!)}}.') // 'You can call me at 202 555 973722.'
     * faker.fake('I flipped the coin an got: {{random.arrayElement(["heads", "tails"])}}') // 'I flipped the coin an got: tails'
     */
    fake(str: string): string;
}
