export default class MersenneTwister19937 {
    private readonly N;
    private readonly M;
    private readonly MATRIX_A;
    private readonly UPPER_MASK;
    private readonly LOWER_MASK;
    private mt;
    private mti;
    /**
     * Returns a 32-bits unsiged integer from an operand to which applied a bit operator.
     *
     * @param n1 number to unsign
     */
    private unsigned32;
    /**
     * Emulates lowerflow of a c 32-bits unsiged integer variable, instead of the operator -.
     * These both arguments must be non-negative integers expressible using unsigned 32 bits.
     *
     * @param n1 dividend
     * @param n2 divisor
     */
    private subtraction32;
    /**
     * emulates overflow of a c 32-bits unsiged integer variable, instead of the operator +.
     * these both arguments must be non-negative integers expressible using unsigned 32 bits.
     *
     * @param n1 number one for addition
     * @param n2 number two for addition
     */
    private addition32;
    /**
     * Emulates overflow of a c 32-bits unsiged integer variable, instead of the operator *.
     * These both arguments must be non-negative integers expressible using unsigned 32 bits.
     *
     * @param n1 number one for multiplication
     * @param n2 number two for multiplication
     */
    private multiplication32;
    /**
     * Initializes mt[N] with a seed.
     *
     * @param seed the seed to use
     */
    initGenrand(seed: number): void;
    /**
     * Initialize by an array with array-length.
     *
     * @param initKey is the array for initializing keys
     * @param keyLength is its length
     */
    initByArray(initKey: number[], keyLength: number): void;
    private mag01;
    /**
     * Generates a random number on [0,2^32]-interval
     */
    genrandInt32(): number;
    /**
     * Generates a random number on [0,2^32]-interval
     */
    genrandInt31(): number;
    /**
     * Generates a random number on [0,1]-real-interval
     */
    genrandReal1(): number;
    /**
     * Generates a random number on [0,1)-real-interval
     */
    genrandReal2(): number;
    /**
     * Generates a random number on (0,1)-real-interval
     */
    genrandReal3(): number;
    /**
     * Generates a random number on [0,1) with 53-bit resolution
     */
    genrandRes53(): number;
}
