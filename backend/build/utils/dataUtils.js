/**
 * Returns the an object with data, error fields, which are initialised based on parse output
 * @param {string} stringDataToBeParsed
 * @returns {ParsedJsonOutput} parsedJsonOutput
 */
export function parseJson(stringDataToBeParsed) {
    let parsedJsonOutput;
    try {
        parsedJsonOutput = {
            data: JSON.parse(stringDataToBeParsed),
            error: null,
        };
    }
    catch (e) {
        parsedJsonOutput = {
            data: {},
            error: e,
        };
    }
    finally {
        return parsedJsonOutput;
    }
}
//# sourceMappingURL=dataUtils.js.map