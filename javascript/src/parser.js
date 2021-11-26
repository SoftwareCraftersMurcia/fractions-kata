const parse = (input) => {
  const isValid = !!input.trim().length > 0;
  if (!isValid) return { valid: false };

  const regex = /\{(\d)\/(\d)\}/g;
  const groups = regex.exec(input);
  console.log(groups);
  return {
    valid: true,
    result: groups[1] / groups[2],
  };
};

module.exports = { parse };
