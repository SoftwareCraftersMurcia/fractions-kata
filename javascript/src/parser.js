const NUMERATOR = 1;
const DENOMINATOR = 2;

const parse = (input) => {
  const isValid = !!input.trim().length > 0;
  if (!isValid) return { valid: false };

  const regex = /\{([-\d]+)\/([-\d]+)\}/g;

  const groups = regex.exec(input);
  return {
    valid: true,
    result: parseInt(groups[NUMERATOR]) / parseInt(groups[DENOMINATOR]),
  };
};

module.exports = { parse };
