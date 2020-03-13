<?php

namespace BakteriyoFaj\PhpFnAliases;

class Math extends PhpMethodCaller
{
    const Abs               = "abs";              // Absolute value
    const ArcCosine         = "acos";             // Arc cosine
    const ACosineH          = "acosh";            // Inverse hyperbolic cosine
    const ArcSine           = "asin";             // Arc sine
    const ASineH            = "asinh";            // Inverse hyperbolic sine
    const ArcTangent2       = "atan2";            // Arc tangent of two variables
    const ArcTangent        = "atan";             // Arc tangent
    const ATangentH         = "atanh";            // Inverse hyperbolic tangent
    const BaseConvert       = "base_convert";     // Convert a number between arbitrary bases
    const BinDec            = "bindec";           // Binary to decimal
    const Ceil              = "ceil";             // Round fractions up
    const Cosine            = "cos";              // Cosine
    const CosineH           = "cosh";             // Hyperbolic cosine
    const DecBin            = "decbin";           // Decimal to binary
    const DecHex            = "dechex";           // Decimal to hexadecimal
    const DecOct            = "decoct";           // Decimal to octal
    const DegToRad          = "deg2rad";          // Converts the number in degrees to the radian equivalent
    const Exp               = "exp";              // Calculates the exponent of e
    const Expm1             = "expm1";            // Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
    const Floor             = "floor";            // Round fractions down
    const FloatMod          = "fmod";             // Returns the floating point remainder (modulo) of the division of the arguments
    const GetRandMax        = "getrandmax";       // Show largest possible random value
    const HexDec            = "hexdec";           // Hexadecimal to decimal
    const Hypot             = "hypot";            // Calculate the length of the hypotenuse of a right-angle triangle
    const IntDiv            = "intdiv";           // Integer division
    const IsFinite          = "is_finite";        // Finds whether a value is a legal finite number
    const IsInfinite        = "is_infinite";      // Finds whether a value is infinite
    const IsNan             = "is_nan";           // Finds whether a value is not a number
    const LcgValue          = "lcg_value";        // Combined linear congruential generator
    const Log10             = "log10";            // Base-10 logarithm
    const Log1p             = "log1p";            // Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
    const Log               = "log";              // Natural logarithm
    const Max               = "max";              // Find highest value
    const Min               = "min";              // Find lowest value
    const MtGetRandMax      = "mt_getrandmax";    // Show largest possible random value
    const MtRand            = "mt_rand";          // Generate a random value via the Mersenne Twister Random Number Generator
    const MtSrand           = "mt_srand";         // Seeds the Mersenne Twister Random Number Generator
    const OctDec            = "octdec";           // Octal to decimal
    const Pi                = "pi";               // Get value of pi
    const Power             = "pow";              // Exponential expression
    const RadToDeg          = "rad2deg";          // Converts the radian number to the equivalent number in degrees
    const Random            = "rand";             // Generate a random integer
    const Round             = "round";            // Rounds a float
    const Sine              = "sin";              // Sine
    const SineH     		= "sinh";             // Hyperbolic sine
    const Square            = "sqrt";             // Square root
    const SeedRandom        = "srand";            // Seed the random number generator
    const Tangent           = "tan";              // Tangent
    const TangentH  		= "tanh";             // Hyperbolic tangent
}