type ParsedJsonOutput = {
    data: object,
    error: Error | null,
}

/**
 * Returns the an object with data, error fields, which are initialised based on parse output
 * @param {string} stringDataToBeParsed 
 * @returns {ParsedJsonOutput} parsedJsonOutput
 */
export function parseJson(stringDataToBeParsed: string): ParsedJsonOutput { 
    let parsedJsonOutput!: ParsedJsonOutput;
    try {
        parsedJsonOutput = {
            data:JSON.parse(stringDataToBeParsed),
            error:null,
        }
    } catch (e: any) { 
        parsedJsonOutput = {
            data: {},
            error: e,
        }
    } finally {
        return parsedJsonOutput;
    }
}