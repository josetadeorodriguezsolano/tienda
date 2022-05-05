import type { Faker } from '.';
/**
 * Module to generate people's names and titles.
 */
export declare class Name {
    private readonly faker;
    constructor(faker: Faker);
    /**
     * Returns a random first name.
     *
     * @param gender The optional gender to use.
     * Can be either `'male'` (or `0`) or `'female'` (or `1`).
     *
     * @example
     * faker.name.firstName() // 'Antwan'
     * faker.name.firstName("female") // 'Victoria'
     * faker.name.firstName(1) // 'Ashley'
     * faker.name.firstName("male") // 'Tom'
     * faker.name.firstName(0) // 'Ismael'
     */
    firstName(gender?: string | number): string;
    /**
     * Returns a random last name.
     *
     * @param gender The optional gender to use.
     * Can be either `'male'` (or `0`) or `'female'` (or `1`).
     *
     * @example
     * faker.name.lastName() // 'Hauck'
     * faker.name.lastName("female") // 'Grady'
     * faker.name.lastName(1) // 'Kshlerin'
     * faker.name.lastName("male") // 'Barton'
     * faker.name.lastName(0) // 'Lockman'
     */
    lastName(gender?: string | number): string;
    /**
     * Returns a random middle name.
     *
     * @param gender The optional gender to use.
     * Can be either `'male'` (or `0`) or `'female'` (or `1`).
     *
     * @example
     * faker.name.middleName() // 'Доброславівна'
     * faker.name.middleName("female") // 'Анастасівна'
     * faker.name.middleName(1) // 'Анатоліївна'
     * faker.name.middleName("male") // 'Вікторович'
     * faker.name.middleName(0) // 'Стефанович'
     */
    middleName(gender?: string | number): string;
    /**
     * Generates a random full name.
     *
     * @param firstName The optional first name to use. If not specified a random one will be chosen.
     * @param lastName The optional last name to use. If not specified a random one will be chosen.
     * @param gender The optional gender to use.
     * Can be either `'male'` (or `0`) or `'female'` (or `1`).
     *
     * @example
     * faker.name.findName() // 'Allen Brown'
     * faker.name.findName('Joann') // 'Joann Osinski'
     * faker.name.findName('Marcella', '', 1) // 'Mrs. Marcella Huels'
     * faker.name.findName(undefined, 'Beer') // 'Mr. Alfonso Beer'
     * faker.name.findName(undefined, undefined, 0) // 'Fernando Schaefer'
     */
    findName(firstName?: string, lastName?: string, gender?: string | number): string;
    /**
     * Generates a random job title.
     *
     * @example
     * faker.name.jobTitle() // 'Global Accounts Engineer'
     */
    jobTitle(): string;
    /**
     * Return a random gender.
     *
     * @param binary Whether to return only binary gender names. Defaults to `false`.
     *
     * @example
     * faker.name.gender() // 'Trans*Man'
     * faker.name.gender(true) // 'Female'
     */
    gender(binary?: boolean): string;
    /**
     * Returns a random name prefix.
     *
     * @param gender The optional gender to use.
     * Can be either `'male'` (or `0`) or `'female'` (or `1`).
     *
     * @example
     * faker.name.prefix() // 'Miss'
     * faker.name.prefix('female') // 'Ms.'
     * faker.name.prefix(1) // 'Dr.'
     * faker.name.prefix('male') // 'Mr.'
     * faker.name.prefix(0) // 'Mr.'
     */
    prefix(gender?: string | number): string;
    /**
     * Returns a random name suffix.
     *
     * @example
     * faker.name.suffix() // 'DDS'
     */
    suffix(): string;
    /**
     * Generates a random title.
     *
     * @example
     * faker.name.title() // 'International Integration Manager'
     */
    title(): string;
    /**
     * Generates a random job descriptor.
     *
     * @example
     * faker.name.jobDescriptor() // 'Customer'
     */
    jobDescriptor(): string;
    /**
     * Generates a random job area.
     *
     * @example
     * faker.name.jobArea() // 'Brand'
     */
    jobArea(): string;
    /**
     * Generates a random job type.
     *
     * @example
     * faker.name.jobType() // 'Assistant'
     */
    jobType(): string;
}
